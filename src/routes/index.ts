import {Router} from 'express';
import {imports} from '../lib/import';
import {api as main} from './api';
import {routerHandle} from '../lib/routerHandle';
import {setErrorOccur} from "../middleware/setErrorOccur";
import {checkErrorOccur} from "../middleware/checkErrorOccur";
import {successHandler} from "../middleware/successHandler";
import {validaters} from '../middleware/inputValidate';
import {validateError} from '../middleware/validateError';
import {outPutEncrypt} from "../middleware/outPutEncrypt";

var bodyParser = require('body-parser')
const { check, body, query, param, custom,validationResult  } = require('express-validator')

class routes {

    private controllers:any = {};
    private formats:any = {};
    private param:any = {};
    private routers:any = {};
    private router:any = Router();
    private readController:any;
    private readFormat:any;
    private readParam:any;
    private jsonParser = bodyParser.json()

    public setUp(){

        this.readController = new imports().readController();
        this.readFormat = new imports().readFormat();
        this.readParam = new imports().readParam();
        this.setControllersMapObj();
        this.setParamsMapObj();
        this.setFormatsMapObj();
        this.setRoutesMapObj();
        this.generate();
        return this.router

    }


    private setControllersMapObj(){

        for (let name in this.readController){

            this.controllers[name] = require(this.readController[name])[name];
        }
    }


    private setFormatsMapObj(){

        for (let name in this.readFormat){

            this.formats[name] = require(this.readFormat[name])[name];

        }
       
    }

    private setParamsMapObj(){

        for (let name in this.readParam){

            this.param[name] = require(this.readParam[name])[name];
        }

    }

    private  setRoutesMapObj(){
        Object.keys(main).forEach(k=> this.routers[k] = main[k]);
    }


    private generate(){

        for(let prop in this.routers) {
            let {uri, httpMethod, controller, action} = routerHandle.splitF(this.routers, prop);

            let v = routerHandle.setM(this.param, controller, action);
            let c = routerHandle.setM(this.controllers, controller,action);
            let f = routerHandle.setM(this.formats,controller,action);

            this.router[httpMethod](
                uri,
                v,
                validateError.Handler,
                this.jsonParser,
                new setErrorOccur().output,
                c,
                new checkErrorOccur().output,
                f,
                // new outPutEncrypt().output,
                new successHandler().output
            );

        }

    }

}

export let instanceRoutes=(new routes()).setUp();

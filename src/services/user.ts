import sequelize from "../iniDB/server";
import { RequestHandler } from 'express';
import { user as userRepo } from '../repositories/user'
import { errorTools } from '../lib/error'

export class user {

    private userRepo: any;

    constructor() {

        this.userRepo = new userRepo();
    }

    public userGetOne: RequestHandler = async (req, res, next) => {

        let returnData: any = await this.userRepo.getOne(req, res, next);
        returnData = returnData == 'OK' ? true : false;

        const obj: object = {
            data: returnData,
        }

        return obj;
    }

    public userPostOne: RequestHandler = async (req, res, next) => {

        let returnData: any = await this.userRepo.postOne(req, res, next);
        returnData = returnData == 'OK' ? true : false;

        const obj: object = {
            data: returnData,
        }

        return obj;
    }

    public userPutOne: RequestHandler = async (req, res, next) => {

        let returnData: any = await this.userRepo.putOne(req, res, next);
        returnData = returnData == 'OK' ? true : false;

        const obj: object = {
            data: returnData,
        }

        return obj;
    }

    public userDeleteOne: RequestHandler = async (req, res, next) => {

        let returnData: any = await this.userRepo.deleteOne(req, res, next);
        returnData = returnData == 'OK' ? true : false;

        const obj: object = {
            data: returnData,
        }

        return obj;
    }

}

import { RequestHandler } from 'express';
import { user as userService } from '../services/user';

export class user {

    public static userGetOne: RequestHandler = async (req, res, next) => {

        let returnData = await new userService().userGetOne(req, res, next);
        res.locals = { rawParams: returnData }
        next();
    }

    public static userPostOne: RequestHandler = async (req, res, next) => {

        let returnData = await new userService().userPostOne(req, res, next);
        res.locals = { rawParams: returnData }
        next();
    }

    public static userPutOne: RequestHandler = async (req, res, next) => {

        let returnData = await new userService().userPostOne(req, res, next);
        res.locals = { rawParams: returnData }
        next();
    }

    public static userDeleteOne: RequestHandler = async (req, res, next) => {

        let returnData = await new userService().userDeleteOne(req, res, next);
        res.locals = { rawParams: returnData }
        next();
    }


}

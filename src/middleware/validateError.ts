import {validationResult} from 'express-validator';
import {errorTools} from '../lib/error';

export let validateError = {
    Handler: (req:any, res:any, next:any) => {
        const errors = validationResult(req);
        //console.log('errors!!!=========',errors);
        if (errors.isEmpty()) return next();
        let err = errorTools.obj(errors, 500);
        //console.log('error=========',err);
        return next(err);
    }
};
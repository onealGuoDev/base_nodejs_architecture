import {NextFunction, Request, RequestHandler, Response} from 'express'
export class checkErrorOccur{

    public output = (req: Request, res: Response, next: NextFunction) =>{

        if (!req['isErrorOccur']) return next();
        let errors = req['controllerErrorMsg']
        return next(errors);
    }
}
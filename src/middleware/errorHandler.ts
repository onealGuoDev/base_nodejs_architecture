import {NextFunction, Request, Response} from "express";

/** @format */

export const errorHandler = async (err, req: Request, res: Response, next: NextFunction) => {
    // res.locals.message = err.message;
    // res.locals.error = req.app.get('env') === 'development' ? err : {};
    // let errJson={error:err.message};

    //判斷transaction_exception是否存在(有例外則不必rollback)
    // if (!req.body.transaction_exception) {
        if (req.body.transaction) {
            let transaction = req.body.transaction
            transaction.rollback()
        }
    // }
    let status = err.statusCode
    console.log('error message=', err)
    // console.log('message',err.message);
    let errJson: any
    if (err.message.errors) {
        errJson = err.message
    } else {
        errJson = {errors: err.message}
    }

    //console.log('env', req.app.get('env') === 'development');
    // if (req.app.get('env') === 'development') errJson.devError = ;
    //console.log('err', err);
    //console.log('status', status);
    // console.log('detail', detail);
    //console.log('errJson', errJson);


    //winston.error ( err.toString() ) ;
    // console.log('error handler',` ${ err.status ||  500 } - ${ err.message } - ${ req.originalUrl } - ${ req.method } - ${ req.ip } `);
    // console.log('error handler 22', errJson)

    return res.status(status || 500).json(errJson)
}

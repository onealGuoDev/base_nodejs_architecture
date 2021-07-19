var createError = require('http-errors');
import { RequestHandler,Request,Response,NextFunction } from "express";

export default function(req:Request,res:Response,next:NextFunction){
    next(createError(404));

}

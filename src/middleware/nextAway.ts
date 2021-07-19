import { RequestHandler } from 'express'

export let nextAway:RequestHandler = (req,res,next) =>{
    return next();
}
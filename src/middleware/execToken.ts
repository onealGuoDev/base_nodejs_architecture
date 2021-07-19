import { Request, Response, NextFunction } from "express";
import { errorTools } from '../lib/error'
import * as jwt from 'jsonwebtoken'
import * as dotenv from 'dotenv';


dotenv.config({ path: __dirname + '/../../.env' });

export async function execToken(req: Request, res: Response, next: NextFunction) {

    let env: any = process.env;
    let secretOrKey: any = env.SECRET_OR_KEY;

    //如果有token的話，判別身份並賦予身份別
    if (req.headers.authorization) {
        let tokenSplit = req.headers.authorization.split(' ')

        let decode: any = await jwt.verify(tokenSplit[1], secretOrKey, {}, async function (err: any, decoded: any) {
            if (err) {
                console.log('\x1b[36m%s\x1b[0m', `exec token err======`, err)
                return 'error';
            } else {
                return decoded;
            }
        })
        try {
            let roleType = decode['actor'][0]
            req[`${roleType}`] = decode
            req['firstLogin'] = decode['firstLogin']
            req['login'] = true
            next()
        } catch (err) {
            // console.log('err==', err)
            next()
        }
    } else {
        //如果沒有token就直接next
        return next(errorTools.gen(`login false`, 404))
    }

}
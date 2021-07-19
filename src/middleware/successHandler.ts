import { RequestHandler } from 'express'

export class successHandler{

    public output:RequestHandler = async (req,res,next) =>{

        let result: any = res.locals.result
        // let login: any = req.body['login']
        // console.log('result=', result)
        // result['login'] = login
        // let result = {
        //     success: res.locals.result
        // };
        if (res.locals.userToken) {
            console.log('user login success')
        } else if (res.locals.staffToken) {
            console.log('staff login success')
        }
        console.log('req.url', req.url)


        let data = {
            success: res.locals.result,
            // login
        }
        return res.json(data)
    }

}
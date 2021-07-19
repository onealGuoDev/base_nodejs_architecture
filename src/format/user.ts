import { RequestHandler } from "express";
import { formatLib } from "../lib/format";

export class user {

    public static getUserOne: RequestHandler = async (req, res, next) => {

        let param: any = res.locals.rawParams
        let outputData: object = {
            data: Array<{
                id: number,
                name: string,
                status: string,
                is_suspend: Boolean
            }>(),
        }
        outputData['data'].push({
            result: param.data
        })
        res.locals.result = outputData

        return next()
    }

    public static postUserOne: RequestHandler = async (req, res, next) => {

        let param: any = res.locals.rawParams
        let outputData: object = {
            data: Array<{
                id: number,
                name: string,
                status: string,
            }>(),
        }
        outputData['data'].push({
            account: req.body['account'],
            email: req.body['email'],
            user_id: param.user_id,
            name: param.name,
        })
        res.locals.result = outputData

        return next()
    }

    public static putUserOne: RequestHandler = async (req, res, next) => {

        let param: any = res.locals.rawParams
        let outputData: object = {
            data: Array<{
                user_id: string,
                account: number,
                email: string,
            }>(),
        }
        outputData['data'].push({
            account: param['account'],
            email: param['email'],
            user_id: param.user_id,
        })
        res.locals.result = outputData

        return next()
    }

    public static deleteUserOne: RequestHandler = async (req, res, next) => {

        let param: any = res.locals.rawParams
        let outputData: object = {
            data: Array<{
                user_id: number,
                sticker_media_id: number,
                name: string,
                nick_name: string,
                message: string,
                message_warn: Boolean,
                message_warn_music_type: number,
            }>(),
        }

        outputData['data'].push({
            user_id: param.user_id,
            sticker_media_id: param.sticker_media_id,
            name: param.name,
            nick_name: param.nick_name,
            message: param.message,
            message_warn: param.message_warn === 0 ? true : false,
            message_warn_music_type: param.message_warn_music_type,
        })
        res.locals.result = outputData

        return next()
    }

}

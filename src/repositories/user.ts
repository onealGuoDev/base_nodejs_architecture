import { RequestHandler } from 'express'
import * as Sequelize from 'sequelize';
import sequelize from "../iniDB/server";
import { setTimeZone } from '../lib/set-timezone'
const op = Sequelize.Op;
import User from "../model/user";
import Staff from "../model/staff";
import UserProfile from "../model/userProfile";
import { redisServer as redisServer } from '../iniDB/redis';

export class user {


    public getUserOne: RequestHandler = async (req, res, next) => {

        let result: any;

        result = await User.findAll(
            {
                attributes: [
                    'id',
                    'account',
                    'password',
                    'role_type_id',
                    'email',
                    'status_id',
                    [Sequelize.fn('date_format', Sequelize.col('created_at'), '%Y-%m-%d %H:%i:%S'), 'createdAt'],
                    [Sequelize.fn('date_format', Sequelize.col('updated_at'), '%Y-%m-%d %H:%i:%S'), 'updatedAt']

                ],
            }
        ).then((result: any) => {
            return result;
        }).catch((err: any) => {
            console.log('\x1b[31m %s\x1b[34m%s\x1b[0m', '---------------------------------------');
            console.log(err)
            console.log('\x1b[31m %s\x1b[34m%s\x1b[0m', '---------------------------------------');
        })

        return result
    }

    public userPostOne: RequestHandler = async (req, res, next) => {

    }

    public userPutOne: RequestHandler = async (req, res, next) => {


    }

    public userDeleteOne: RequestHandler = async (req, res, next) => {

    }

}

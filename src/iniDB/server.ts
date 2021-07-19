var Sequelize = require('sequelize')
require('dotenv').config()

let env = process.env;

// @ts-ignore
const sequelize = new Sequelize('chat',env.DB_USERNAME,env.DB_PASSWORD,{
    dialect:'mysql',
    host:env.DB_HOST,
    port:env.DB_PORT
})





export default sequelize;
import {checkErrorOccur} from "./middleware/checkErrorOccur";

const express = require('express');
import Sequelize from './iniDB/server';
import * as dotenv from 'dotenv';
import * as path from 'path';
import { instanceRoutes } from "./routes/index";
import { errorHandler } from "./middleware/errorHandler";
import { execToken } from "./middleware/execToken";
import notFound from "./middleware/notFound";
import { association } from "./model/association";
import { userAuth } from "./middleware/userAuth";
import { staffAuth } from "./middleware/staffAuth";
import * as cronTask from './services/cron_job'
import {inputImageMediaHandle,inputVideoMediaHandle} from "./middleware/mediaHandle";
const fs = require('fs');

var bodyParser = require('body-parser')
var cors = require('cors');
var corsOptions = {
    origin: '*',
    methods: 'GET,HEAD,PUT,PATCH,POST,DELETE',
    credentials: true,
}

dotenv.config({ path: __dirname + '/../.env' });
var app = express();
let env = process.env;
var port = env.SYS_API_SERVER_LISTEN_PORT;

let apiVersionNo = env.SYS_API_VERSION_1

app.use(cors(corsOptions));//

app.use(express.static(path.join(__dirname, '../public')));//

app.use(`/${apiVersionNo}`, instanceRoutes)
association();

app.use(notFound) // catch 404 and forward to error handler
app.use(errorHandler);

app.listen(port, () => {
    console.log("server is running port is " + port)
})

module.exports = app

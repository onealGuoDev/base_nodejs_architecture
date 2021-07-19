const fs = require('fs')
const path = require('path')
import exp = require("constants");

export class imports{

    public baseName = path.basename(__filename);
    public controllerFolder = __dirname+'/../controller';
    public importController:any = {};
    public formatFolder = __dirname+'/../format';
    public importFormat:any = {};
    public paramFolder = __dirname+'/../param';
    public importParam:any = {};


    public readController (){

        fs
            .readdirSync(this.controllerFolder)
            .filter((file: any)=>{
                return(file.indexOf('.') !== 0) && (file != this.baseName) && (file.slice(-3) === '.js')
            })
            .forEach((file: any)=>{
                const fileName= path.basename(file,'.js');
                this.importController[fileName]=path.join(this.controllerFolder,fileName);
            })

        return this.importController

    }

    public readFormat (){

        fs
            .readdirSync(this.formatFolder)
            .filter((file: any)=>{
                return(file.indexOf('.') !== 0) && (file != this.baseName) && (file.slice(-3) === '.js')
            })
            .forEach((file: any)=>{
                const fileName= path.basename(file,'.js');
                this.importFormat[fileName]=path.join(this.formatFolder,fileName);
            })
        return this.importFormat


    }

    public readParam (){

        fs
            .readdirSync(this.paramFolder)
            .filter((file: any)=>{
                return(file.indexOf('.') !== 0) && (file != this.baseName) && (file.slice(-3) === '.js')
            })
            .forEach((file: any)=>{
                const fileName= path.basename(file,'.js');
                this.importParam[fileName]=path.join(this.paramFolder,fileName);
            })

        return this.importParam


    }
}

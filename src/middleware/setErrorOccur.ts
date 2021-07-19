
export class setErrorOccur{

    public output:any = (req:any,res:any,next:any) =>{

        req.isErrorOccur = false
        next()
    }
}
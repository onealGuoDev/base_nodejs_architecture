export let errorTools = {

    obj: (obj:any, code:any) => {
        let err:any = new Error(obj);
        err.message = obj;
        if (code) err['statusCode'] = code;


        return err;
    }
    ,
    gen: (msg:any, code:any) => {

        let err:any = new Error(msg);
        if (code) err['statusCode'] = code;


        return err;
    }


};
import {nextAway as eM} from '../middleware/nextAway'

export class routerHandle{

    public static splitF(routers:any,prop:any){

        let action = routers[prop];
        const ary2 = action.split(':') // api.ts 裡的value
        const ary1 = prop.split('::') // api.ts 裡的key
        return {
            uri: ary1[1],
            httpMethod: ary1[0],
            controller: ary2[0],
            action: ary2[1]
        }

    }

    public static setM(obj:any,controller:any,action:any){

        return ((obj[controller]) ? (obj[controller])[action] : eM ) || eM;
    }
}
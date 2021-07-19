/** @format */
import {obj} from '../routes/params'
import { check, body, query, param } from 'express-validator'
let _validaters = obj;
const params = param;
const merge = (obj:any) => {
  const type = 'input'
  const uri = 'uri'
  const data = 'data'
  const param = 'param'
  const custom = 'custom'
  const msg = 'not exist!!'
  const msgEmpty = 'empty!!'
  const ary = []
  const objInput = obj[type]
  for (let key in objInput[uri]) {
    // @ts-ignore
    ary.push(query (objInput[uri][key], msg).exists())
    // ary.push(check(objInput[uri][key],msgEmpty).not().isEmpty());
  }
  for (let key in objInput[data]) {
    // @ts-ignore
    ary.push(body(objInput[data][key], msg).exists())
    // ary.push(
    //   check(objInput[data][key], msgEmpty)
    //     .not()
    //     .isEmpty()
    // )
  }

  if (objInput[param] !== undefined) {
    //console.log('objInput[param]=======', objInput[param])
    for (let key in objInput[param]) {
      // @ts-ignore
      ary.push(params(objInput[param][key], msg).exists())
      // ary.push(
      //   params(objInput[param][key], msgEmpty)
      //     .not()
      //     .isEmpty()
      // )
    }
  }
  for (let key in objInput[custom]) {
    // @ts-ignore
    ary.push(objInput[custom][key])
  }
  return ary
}

for (let controller in obj) {
  for (let action in obj[controller]) {
    const ary = merge(obj[controller][action])
    //console.log(controller,action);
    _validaters[controller][action] = ary
  }
}

// console.log(validaters);

export let validaters=_validaters;


export let api: any = {

    //user
    "post::/user/:user_id": "user:getUserOne",  //取得單一使用者
    "post::/user": "user:postUserOne",  //新增使用者
    "put::/user/:user_id": "user:putUserOne",  // 更新單一使用者
    "delete::/user/:user_id": "user:deleteUserOne",  // 刪除單一使用者

}

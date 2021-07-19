import * as Sequelize from 'sequelize';
import sequelize from '../iniDB/server';
const User =  sequelize.define('users',{
    id:{
        type:Sequelize.INTEGER,
        autoIncrement:true,
        allowNull:false,
        primaryKey:true
    },
    account:{
        type:Sequelize.STRING,
        allowNull:false
    },
    password:{
        type:Sequelize.STRING,
        allowNull:false
    },
    email:{
        type:Sequelize.STRING,
        allowNull:true,
    },
    role_type_id:{
        type:Sequelize.INTEGER,
        allowNull:true,
    },
    status_id:{
        type:Sequelize.INTEGER,
        allowNull:false
    },
    createdAt: {
        field: 'created_at',
        type: Sequelize.DATE,
    },
    updatedAt: {
        field: 'updated_at',
        type: Sequelize.DATE,
    },

})

export default User;
import * as Sequelize from 'sequelize';
import sequelize from '../iniDB/server';
const UserProfiles = sequelize.define('user_profiles', {
    id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true
    },
    user_id: {
        type: Sequelize.INTEGER,
        allowNull: false
    },
    sticker_media_id: {
        type: Sequelize.INTEGER,
        allowNull: false
    },
    name: {
        type: Sequelize.STRING,
        allowNull: false,
    },
    nick_name: {
        type: Sequelize.STRING,
        allowNull: true,
    },
    message: {
        type: Sequelize.STRING,
        allowNull: true
    },
    status_id: {
        type: Sequelize.INTEGER,
        allowNull: false
    },
    message_warn: {
        type: Sequelize.INTEGER,
        allowNull: false
    },
    message_warn_music_type: {
        type: Sequelize.INTEGER,
        allowNull: false
    },
    createdAt: {
        field: 'created_at',
        type: Sequelize.DATE,
    },
    updatedAt: {
        field: 'updated_at',
        type: Sequelize.DATE,
    },

}
    // , {
    //     freezeTableName: true, // ORM 要求table為複數時，可用此方法取消
    // }
)

export default UserProfiles;
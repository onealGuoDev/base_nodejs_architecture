import User from "./user";
import UserProfiles from "./userProfile";



export const association = () => {
    User.hasOne(UserProfiles, { foreignKey: { name: 'id' } });
    UserProfiles.hasOne(User, { foreignKey: { name: 'user_id' } });
}

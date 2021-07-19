const express = require('express');
const app = express();
const commands = express.Router({ mergeParams: true });
commands.get('/a', function (req, res, next) {
    console.log(1)
});
commands.get('/a/b', function (req, res, next) {
    console.log(2)
});
app.use('/', commands);
app.listen(3000);
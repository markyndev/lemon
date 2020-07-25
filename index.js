const low = require("lowdb");
const FileSync = require("lowdb/adapters/FileSync");
const adapter = new FileSync("./data/host.json");
const db = low(adapter);
var fs = require('fs'),
    request = require('request');

 
var download = function(uri, filename, callback){
  request.head(uri, function(err, res, body){
	console.log('[📦] Acquiring information')
    console.log('[📦] Content-type:', res.headers['content-type']);
    console.log('[📦] Content-length:', res.headers['content-length']);

    request(uri).pipe(fs.createWriteStream(filename)).on('close', callback);
  });
};


var myArgs = process.argv.slice(2);

switch (myArgs[0]) {
case 'install':
let pck = db.get('server').find({getname: myArgs[1]}).value()
    console.log(myArgs[1]);
    console.log(pck)
    
download(pck.link, pck.file, function(){
  console.log(`[✔] ${pck.appname} is downloaded successfully`);
});
    break;

default:
    console.log('You need to put a real argument');
       break;
}

var args = process.argv.slice(2);
var fs = require('fs');
console.log(args);
console.log('loading fonts');
var icons = require(`./${args[0]}`);
var iconNames = Object.getOwnPropertyNames(icons);
var filters = require(`./${args[1]}`);
var outputNames = iconNames.filter(function(name){
	return filters.indexOf(name)>0;
});

let outputIcons = {};
outputNames.forEach(function(prop) {
	outputIcons[prop] = icons[prop];
});
let contents = JSON.stringify(outputIcons);
fs.writeFileSync(args[2], contents);

console.log(filters.length+' icon names were provided');
console.log('out of them ' + outputNames.length+' icons were found and written to disk.');
console.log('available Icons are: ' + outputNames.join(', ') );
console.log('File written! with size: ' + Math.round(contents.length/1000, 1) + 'K bytes.');


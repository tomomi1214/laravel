{"filter":false,"title":"script.js","tooltip":"/bbs/public/js/script.js","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["function previewImage(obj){","\tvar fileReader = new FileReader();","\tfileReader.onload = (function() {","\t\tdocument.getElementById('preview').src = fileReader.result;","\t});","\tfileReader.readAsDataURL(obj.files[0]);","}",""],"id":1}],[{"start":{"row":6,"column":1},"end":{"row":7,"column":0},"action":"remove","lines":["",""],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":1},"end":{"row":6,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":372,"mode":"ace/mode/javascript"}},"timestamp":1621431264297,"hash":"a142b9cc58719a58cb0211285037ae491e26aeb8"}
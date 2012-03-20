#!/bin/bash

qa_path="/Users/alex/Sites/qafrs";
build_tag=$1;

echo "wiping out destination directory";
rm -rf $qa_path/*;

echo "copying ./cake/* to $qa_path";
cp -r ./cake/* $qa_path;

echo "copying qa db connection settings"
cat ./cake/app/Config/database.php | sed "s/\$default/\$devfrsdb/" | sed "s/\$qafrsdb/\$default/" > $qa_path/app/Config/database.php;

echo "setting /tmp permissions to a+rw";
chmod -R a+rw $qa_path/app/tmp;

echo "updating build element for website";
echo -e "
<div class=\"environment\">\n
QA Environment\n
<p />\n
Build:$build_tag\n
</div>" > $qa_path/app/View/Elements/environment.ctp

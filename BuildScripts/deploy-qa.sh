#!/bin/bash

qa_path="/Users/alex/Sites/qafrs";

echo "wiping out destination directory";
rm -rf $qa_path/*;

echo "copying ./cake/* to $qa_path";
cp -r ./cake/* $qa_path;

echo "seting /tmp permissions to a+rw";
chmod -R a+rw $qa_path/app/tmp;

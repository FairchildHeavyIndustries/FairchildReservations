#!/bin/bash

qa_path="/Users/alex/Sites/qafrs";

echo "copying ./cake/* to $qa_path";
cp ./cake/* $qa_path;

echo "seting /tmp permissions to a+rw";
chmod -R a+rw $qa_path/app/tmp;

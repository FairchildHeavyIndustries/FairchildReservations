#!/bin/bash

if test $# -lt 1
then
        echo "USAGE: <tag to build, HEAD for latest >
        Examples: 
		$0 v01.02
		$0 HEAD"
        exit 1
fi

buildTag=$1;
buildDirectory="~/Build";

git tag -l;
cd $buildDirectory";
git checkout $buildTag;


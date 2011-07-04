#!/bin/bash

if test $# -lt 1
then
        echo "USAGE: <the tag name, or 'master' for HEAD on master branch >
        Examples: 
		$0 v01.02
		$0 master"
        exit 1
fi

currTimestamp=$(date +%Y%m%d%H%M%S);
buildTag=$1;
buildDirectory="Build/FairchildReservations";
cd ~/$buildDirectory;
git fetch --tags;

function generateNewTag () {
	latestTag = $1;
	#get the position of dot
	# substring from dot to end
	# increment by 1
	# back to string with zero padding
	return 'v0.03';
}



# get list of tags
latestTag=$(git describe master --tags --abbrev=0);  # gives latest tag on master
echo "latest tag is $latestTag"
# if latest tag is not different than latest tag, then nothing to build
# git diff $latestTag master << empty if no diff
git diff --exit-code $buildTag $latestTag &> /dev/null ; 
if [ $? -eq 1 ]
then 
	echo "`date` difference found "; 
	generateNewTag;
	return_val=$?;
	echo $return_val;
fi;

# if different, we generate a new tag. 
# we tag the last commit, 
# then we build

#git checkout $buildTag;
#git pull;





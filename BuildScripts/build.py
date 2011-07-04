#!/usr/bin/env python
# encoding: utf-8
"""
build.py

Created by Alex Fairchild on 2011-07-03.
Copyright (c) 2011 Fairchild Heavy Industries. All rights reserved.


import sys
import os


def main():
	pass


if __name__ == '__main__':
	main(
		
	)
"""
import sys
inputBegin=int(raw_input("enter the first number:\n"))
inputEnd=int(raw_input("enter the other number:\n"))

primeList=findPrimes(inputBegin, inputEnd)
print "the primes between",inputBegin,"and",inputEnd,"are:"
for i in primeList:
	print i,

def findPrimes(begin, end):
	"""finds all the primes between the begin and end values"""
	pl=[]
	for n in range(begin, end):
		if n % 2 == 0:
			continue
		for x in range(2,n):
			if n % x == 0:
				break
		else:
			pl.append(n)
	return pl
	





		
			
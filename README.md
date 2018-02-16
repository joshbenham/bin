# bin

[Josh Benham](http://joshbenham.net)'s personal bin directory


## Overview

Simple scripts that I tend to use on a day to day basis (or atleast more than once).


## Instructions

```sh
# grab the repo
$ git clone --depth 1 https://github.com/joshbenham/bin ~/bin
```

## Scripts

Find duplicate files

```sh
# find duplicates of a file in a directory and all its subdirectories
$ find-duplicates /home/user/images

# to find out exactly how many duplicates there are
$ find-duplicates /home/user/images | wc -l
```

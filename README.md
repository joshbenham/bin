# BIN

## Installation

```sh
# grab the repo
$ git clone --depth 1 git@github.com:joshbenham/bin.git ~/bin
```

## Scripts

Find duplicate files

```sh
# find duplicates of a file in a directory and all its subdirectories
$ dupes /home/user/images

# to find out exactly how many duplicates there are
$ dupes /home/user/images | wc -l
```

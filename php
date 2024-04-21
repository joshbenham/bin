#!/usr/bin/env bash

if [[ -d "$PWD/.ddev" ]]; then
  echo "exec php $@"
  ddev exec php $@
elif [[ $PWD == */Herd/* ]]; then
  echo "herd php $@"
  herd php $@
else
  echo "/usr/bin/php $@"
  /usr/bin/php $@
fi

#!/bin/bash

set -e
set -o pipefail

readonly DIR_APP=$(readlink -f -- "$(dirname -- "$0")/../..")

function install_bin_taskfile() {
    sh -c "$(curl --location https://taskfile.dev/install.sh)" -- -d -b "$DIR_APP"/bin
}

# Install taskfile binary
install_bin_taskfile
"$DIR_APP"/bin/task docker:start

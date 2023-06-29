#!/bin/bash
set -e

# Check if Node.js is installed
if ! command -v node &> /dev/null; then
    echo "Node.js is not found. Installing Node.js..."
    
    # Install Node.js and npm
    curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
    sudo apt-get install -y nodejs

    echo "Node.js is installed."
else
    echo "Node.js is already installed."
fi

# Install Node.js dependencies
npm install --production

# Package the application
zip -r deployment-package.zip .

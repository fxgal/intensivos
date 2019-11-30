#!/usr/bin/env bash

bin/cake migrations seed --seed DropDatabaseSeed
bin/cake migrations migrate
bin/cake migrations seed --seed DatabaseSeed

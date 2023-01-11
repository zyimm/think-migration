<?php


use think\Console;

Console::addDefaultCommands([
    "think\\migration\\command\\migrate\\Create",
    "think\\migration\\command\\migrate\\Run",
    "think\\migration\\command\\migrate\\Rollback",
    "think\\migration\\command\\migrate\\Breakpoint",
    "think\\migration\\command\\migrate\\Status",
    "think\\migration\\command\\seed\\Create",
    "think\\migration\\command\\seed\\Run",
]);

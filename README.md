# Steps

1. Run `bin/console example`
2. Output should be 
```
"first"
"second"
"third"
```
but it will be 
```
"first"
"third"
""
```

See [config/services.php](https://github.com/v-m-i/symfony-argument-bug/blob/main/config/services.php) and [ExampleFactory](https://github.com/v-m-i/symfony-argument-bug/blob/main/src/ExampleFactory.php).
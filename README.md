# Hexagon Architecture Command Line Interface (hxc)
## Installation
At this moment `hxc` is not installable via composer - more on that later.

### Obtaining code
Clone `hxc` repository to the same directory where your project was cloned. This is important.

```shell
git clone https://github.com/9orky/hex-cli
```

### Configuration
Now, go to the root of your project and create config file:
```shell
// .hxc.yaml

source_dir: src
namespace_prefix: App
```
* **source_dir** is a path where your project's source files are
* **namespace_prefix** will be added before the namespace in every generated file

## What can I do with this?
First - you need to get familiar with two things: Generators and Routines. 

### Generators
Generators are for source file content generation. They lay right next to file they will be generating. 
Generating does not rely on any templating system - it works directly on valid PHP files which are edited with
Reflection and little of string replacing. Good enough and simple.

### Routines
Routines on the other hand define which generators and sub-routines will be run when called. Every routine has
`1-m` Generators and `1-m` sub-routines.

### Run
Every time when you run `hxc` you need to provide these parameters:
```shell
hxc Module.SubModule ModelName all
```

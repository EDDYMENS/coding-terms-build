## Definition

One of the beautiful things about a computer is its ability to follow a list of instructions from top to bottom executing them at a fast pace.

But the most remarkable is its ability to continue performing that same task over and over and only stops when it finds an answer for us based on a check we set.


## Use Cases and Examples

Now take the task of adding the first 1000 natural numbers thus `1,2,3,4,5,6...` this is something that will take us a while to do by hand, and will also take us some amount of time if we had to tell the computer "hey add 1  to 2 then to 3 all the way down to 1000".

Instead of this we can tell the computer look add numbers up and stop when you get to 1000. This is what makes loops a useful part of modern programming languages.

Here is an example in the Javascript programming laguage adding up numbers from 1 to 1000:

```
function adder() {
    var sum = 0;
    for(var i = 1; i <= 1000; i++) { // here is the loop
      sum += i;
    }
    console.log("The sum is:", sum);
}

adder(); //The sum is: 500500
```

## Summary

Recursion. 
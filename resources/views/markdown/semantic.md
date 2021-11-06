## Definition
Semantics unlink  {{linkToPost('syntax')}} concerns itself with the intended meaning of any written code. 

So even if a piece of code is correct in terms of syntax (grammar) it might not lead to the intended outcome. At that point, we say we have a semantic error or {{linkToPost('bug')}}.

## Use Cases and Examples

```
// An infinite loop
while (true) { 
  console.log("This text will repeat itself forever");
}
```

The code above is valid in terms of syntax so it will run, the problem though is that the while loop will continue to run forever since the condition `true` will remain true forever. 
The program will eventually crash. It's unlikely this is the kind of outcome a developer is looking for.

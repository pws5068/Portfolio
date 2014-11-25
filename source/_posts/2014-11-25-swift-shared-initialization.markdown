---
layout: post
title: "Swift: Shared initialization"
date: 2014-11-25 15:04
comments: true
categories: swift, code
---

While converting my app, [Medallion](https://itunes.apple.com/us/app/medallion-apartment-discovery/id934516702), to Swift I found myself hung up on sharing initialization logic.

<!-- more -->
#### First attempt
```
class Person: NSObject {
    let name: String
    let age: Int?
    let awesome: Bool
    
    init(name: String) {
        init(name: name, age: nil, awesome: true)
    }
    
    init(name: String, age: Int?, awesome: Bool) {
        self.name = name
        self.age = age
        self.awesome = awesome
    }
}
```

Drats.. XCode is unhappy with a cryptic message within the first init.
> Expected ',' separator

After some failed Google-foo I dug through the Apple docs for a bit to find the examples I was searching for: [Designated Initializers and Convenience Initializers](https://developer.apple.com/library/ios/documentation/swift/conceptual/Swift_Programming_Language/Initialization.html#//apple_ref/doc/uid/TP40014097-CH18-XID_325)

In my previous example, I was missing two things. The reference 'self.' in the helper initializer and the declaration of a convenience method.

Convenience methods are exactly what they sound like. They allow you to have a secondary set of initializers for your class. Here's the corrected implementation:

```
class Person: NSObject {
    let name: String
    let age: Int?
    let awesome: Bool
    
    convenience init(name: String) {
        self.init(name: name, age: nil, awesome: true)
    }
    
    init(name: String, age: Int?, awesome: Bool) {
        self.name = name
        self.age = age
        self.awesome = awesome
    }
}
```
---
layout: post
title: "Git Bisect"
date: 2013-08-16 23:32
comments: true
categories: 
---

[Git Bisect](https://www.kernel.org/pub/software/scm/git/docs/git-bisect.html) the tool you never knew you needed but shouldn't live without.

In short, bisect allows you to find the commit that introduced a bug or unexpected side-effect without reading through hundreds of lines of diffs. <!-- more -->Git bisect automates this process by jumping between commits and allowing you to run your project to see if the bug is still there.  Lets see one scenario where this comes in handy.

Earlier today I was hunting down a display issue in the [Sincerely Ink](https://itunes.apple.com/us/app/ink-cards-personalized-greeting/id477296657) iphone app. The problem was small but multi-faceted so a few files were changed in the process. After fixing the problem, I switched gears & worked on refactoring some duplicate code into shared submodules.

A few hours later I noticed a strange new UI issue in the iPad version of the app.  None of my commits *should* have affected the iPad version ... and I couldn't see any obvious culprit.

```c
	$ git log

	commit 239f095788d37f40d9e6438d18ff337f4db2649
	Author: Paul Silvis <paulsilvis@gmail.com>
	Date:   Fri Aug 16 12:57:39 2013 -0700

    	fixing NUX (nib name recently changed in c7aa42)

	commit 5268b90c048b6690dfe940f96463dbeb0842decc
	Author: Paul Silvis <paulsilvis@gmail.com>
	Date:   Fri Oct 16 11:36:15 2013 -0700

	    Deep links: side panel jump to cached view controller if exists

	... 5 more arbitrary commits

	commit 92decce5d7a824da3eb8a1131654a70d59c832a6
	Author: Paul Silvis <paulsilvis@gmail.com>
	Date:   Thu Aug 15 19:11:52 2013 -0700

	    rewriting deep link handling to support the side panel & various fixes
```

Well, none of the recent commits are very suspect. Lets take a step back, I *know* the iPad UI displayed properly this morning.

Enter git bisect:
```c
	$ git bisect start
	$ git bisect bad 4db2649
	$ git bisect good c832a6
```

Here, we showed git bisect that we're experiencing a problem which was introduced sometime between the *good* commit from yesterday and a *bad* one from today where the problem exists.

Now the magic happens. Git bisect divides and conquers; selecting a commit near the middle and temporarily reverting.  If the issue still exists simply type "git bisect bad" (vs. good) to test another potential culprit. Git bisect will notify you when it's found the offender and typing "git bisect reset" will return to your starting point.

Viola! Git bisect has handled the heavy lifting and tracked down the problem in the optimal number of steps.


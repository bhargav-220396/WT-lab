# Industry Level Git Commands Practice

## 1. Git Configuration Commands

---

### 1. git config --global user.name

Syntax:
git config --global user.name "Your Name"

Purpose:
Sets the global username for Git commits.

Example:
git config --global user.name "iambhargav-2007"

Screenshot:
![git config list](screenshots/git-config-name.png)

---

### 2. git config --global user.email

Syntax:
git config --global user.email "email@example.com"

Purpose:
Sets the global email for Git commits.

Example:
git config --global user.email "n220396@rguktn.ac.in"

Screenshot:
![git config list](screenshots/git-config-email.png)

---

### 3. git config --list

Syntax:
git config --list

Purpose:
Displays all Git configuration settings including username, email, editor, and other configurations.

Example:
git config --list

Screenshot:
![git config list](screenshots/git-config-list.png)


---

### 4. git config --unset

Syntax:
git config --unset <key>

Purpose:
Removes a configuration setting from Git.

Example:
git config --unset user.name

Screenshot:
![git config list](screenshots/git-config-unset.png)


---

## 2. Repository Setup Commands

---

### git init

Syntax:
git init

Purpose:
Initializes a new Git repository in the current directory.

Example:
git init

Screenshot:
![git init](screenshots/git-init.png)

---

### git clone

Syntax:
git clone <repository-url>

Purpose:
Creates a copy of a remote repository on the local machine.

Example:
git clone https://github.com/bhargav-220396/WT-lab.git

Screenshot:
![git clone](screenshots/git-clone.png)

---

### git clone --branch

Syntax:
git clone --branch <branch-name> <repository-url>

Purpose:
Clones a specific branch from a repository.

Example:
git clone --branch main https://github.com/bhargav-220396/WT-lab.git

Screenshot:
![git clone branch](screenshots/git-clone-branch.png)

---

### git clone --depth

Syntax:
git clone --depth <depth> <repository-url>

Purpose:
Creates a shallow clone with limited commit history.

Example:
git clone --depth 1 https://github.com/bhargav-220396/WT-lab.git

Screenshot:
![git clone depth](screenshots/git-clone-depth.png)

---


## 3. Repository Status & Inspection Commands

---

### git status

Syntax:
git status

Purpose:
Displays the current status of the working directory and staging area.

Example:
git status

Screenshot:
![git status](screenshots/git-status.png)

---

### git log

Syntax:
git log

Purpose:
Shows the commit history of the repository.

Example:
git log

Screenshot:
![git log](screenshots/git-log.png)

---

### git log --oneline

Syntax:
git log --oneline

Purpose:
Displays commit history in a compact one-line format.

Example:
git log --oneline

Screenshot:
![git log oneline](screenshots/git-log-oneline.png)

---

### git log --graph

Syntax:
git log --graph

Purpose:
Displays commit history as a graph showing branch structure.

Example:
git log --graph

Screenshot:
![git log graph](screenshots/git-log-graph.png)

---

### git show

Syntax:
git show

Purpose:
Displays details of the latest commit including changes.

Example:
git show

Screenshot:
![git show](screenshots/git-show.png)

---

### git diff

Syntax:
git diff

Purpose:
Shows changes between working directory and last commit.

Example:
git diff

Screenshot:
![git diff](screenshots/git-diff.png)

---

### git diff --staged

Syntax:
git diff --staged

Purpose:
Shows differences between staged changes and last commit.

Example:
git diff --staged

Screenshot:
![git diff staged](screenshots/git-diff-staged.png)

---

### git blame

Syntax:
git blame <file>

Purpose:
Shows line-by-line author information for a file.

Example:
git blame README.md

Screenshot:
![git blame](screenshots/git-blame.png)

---

### git reflog

Syntax:
git reflog

Purpose:
Shows history of HEAD changes in the repository.

Example:
git reflog

Screenshot:
![git reflog](screenshots/git-reflog.png)

---

### git shortlog

Syntax:
git shortlog

Purpose:
Summarizes commit history by author.

Example:
git shortlog

Screenshot:
![git shortlog](screenshots/git-shortlog.png)

---



## 4. File Tracking Commands

---

### git add

Syntax:
git add <file>

Purpose:
Adds a file to the staging area.

Example:
git add tracking.txt

Screenshot:
![git add](screenshots/git-add.png)

---

### git add .

Syntax:
git add .

Purpose:
Stages all modified and new files in the current directory.

Example:
git add .

Screenshot:
![git add dot](screenshots/git-add-dot.png)

---

### git add -p

Syntax:
git add -p

Purpose:
Allows interactive staging of file changes.

Example:
git add -p

Screenshot:
![git add p](screenshots/git-add-p.png)

---

### git restore

Syntax:
git restore <file>

Purpose:
Restores a file to its previous committed state.

Example:
git restore tracking.txt

Screenshot:
![git restore](screenshots/git-restore.png)

---

### git restore --staged

Syntax:
git restore --staged <file>

Purpose:
Removes a file from the staging area.

Example:
git restore --staged tracking.txt

Screenshot:
![git restore staged](screenshots/git-restore-staged.png)

---

### git rm

Syntax:
git rm <file>

Purpose:
Removes a file from the repository and working directory.

Example:
git rm delete.txt

Screenshot:
![git rm](screenshots/git-rm.png)

---

### git mv

Syntax:
git mv <old-file> <new-file>

Purpose:
Moves or renames a file in the repository.

Example:
git mv rename.txt renamed-file.txt

Screenshot:
![git mv](screenshots/git-mv.png)

---


## 5. Commit Commands

---

### git commit

Syntax:
git commit

Purpose:
Creates a commit and opens an editor to write the commit message.

Example:
git commit

Screenshot:
![git commit](screenshots/git-commit.png)

---

### git commit -m

Syntax:
git commit -m "message"

Purpose:
Creates a commit with a message directly from the command line.

Example:
git commit -m "Added new feature"

Screenshot:
![git commit m](screenshots/git-commit-m.png)

---

### git commit --amend

Syntax:
git commit --amend

Purpose:
Modifies the most recent commit.

Example:
git commit --amend

Screenshot:
![git commit amend](screenshots/git-commit-amend.png)

---

### git commit --no-edit

Syntax:
git commit --amend --no-edit

Purpose:
Amends the last commit without changing the commit message.

Example:
git commit --amend --no-edit

Screenshot:
![git commit no edit](screenshots/git-commit-no-edit.png)

---



## 6. Branch Management Commands

---

### git branch

Syntax:
git branch

Purpose:
Lists all local branches.

Example:
git branch

Screenshot:
![git branch](screenshots/git-branch.png)

---

### git branch -a

Syntax:
git branch -a

Purpose:
Lists all local and remote branches.

Example:
git branch -a

Screenshot:
![git branch a](screenshots/git-branch-a.png)

---

### git checkout -b

Syntax:
git checkout -b <branch-name>

Purpose:
Creates and switches to a new branch.

Example:
git checkout -b feature-test

Screenshot:
![git checkout b](screenshots/git-checkout-b.png)

---

### git switch

Syntax:
git switch <branch-name>

Purpose:
Switches to another branch.

Example:
git switch main

Screenshot:
![git switch](screenshots/git-switch.png)

---

### git switch -c

Syntax:
git switch -c <branch-name>

Purpose:
Creates and switches to a new branch using switch command.

Example:
git switch -c bugfix-test

Screenshot:
![git switch c](screenshots/git-switch-c.png)

---

### git checkout

Syntax:
git checkout <branch-name>

Purpose:
Switches to another branch.

Example:
git checkout main

Screenshot:
![git checkout](screenshots/git-checkout.png)

---

### git branch -d

Syntax:
git branch -d <branch-name>

Purpose:
Deletes a branch safely.

Example:
git branch -d feature-test

Screenshot:
![git branch d](screenshots/git-branch-d.png)

---

### git branch -D

Syntax:
git branch -D <branch-name>

Purpose:
Force deletes a branch.

Example:
git branch -D temp-branch

Screenshot:
![git branch D](screenshots/git-branch-Dd.png)

---



## 7. Merge & Integration Commands

---

### git merge

Syntax:
git merge <branch-name>

Purpose:
Combines changes from another branch into the current branch.

Example:
git merge merge-demo

Screenshot:
![git merge](screenshots/git-merge.png)

---

### git merge --no-ff

Syntax:
git merge --no-ff <branch-name>

Purpose:
Forces Git to create a merge commit even when fast-forward merge is possible.

Example:
git merge --no-ff merge-noff-demo

Screenshot:
![git merge no ff](screenshots/git-merge-noff.png)

---



## 8. Remote Repository Commands

---

### git remote

Syntax:
git remote

Purpose:
Lists all configured remote repositories.

Example:
git remote

Screenshot:
![git remote](screenshots/git-remote.png)

---

### git remote -v

Syntax:
git remote -v

Purpose:
Displays remote repository URLs along with their fetch and push operations.

Example:
git remote -v

Screenshot:
![git remote v](screenshots/git-remote-v.png)

---

### git remote add

Syntax:
git remote add <name> <repository-url>

Purpose:
Adds a new remote repository to the local Git repository.

Example:
git remote add test-remote https://github.com/bhargav-220396/fetch-vs-pull.git

Screenshot:
![git remote add](screenshots/git-remote-add.png)

---

### git remote remove

Syntax:
git remote remove <name>

Purpose:
Removes a remote repository from the local configuration.

Example:
git remote remove test-remote

Screenshot:
![git remote remove](screenshots/git-remote-remove.png)

---

### git fetch

Syntax:
git fetch

Purpose:
Downloads commits, files, and references from a remote repository without merging them into the current branch.

Example:
git fetch

Screenshot:
![git fetch](screenshots/git-fetch.png)

---

### git fetch --all

Syntax:
git fetch --all

Purpose:
Fetches updates from all configured remote repositories.

Example:
git fetch --all

Screenshot:
![git fetch all](screenshots/git-fetch-all.png)

---

### git pull

Syntax:
git pull

Purpose:
Fetches changes from a remote repository and merges them into the current branch.

Example:
git pull

Screenshot:
![git pull](screenshots/git-pull.png)

---

### git pull --rebase

Syntax:
git pull --rebase

Purpose:
Fetches remote changes and rebases local commits on top of them instead of merging.

Example:
git pull --rebase

Screenshot:
![git pull rebase](screenshots/git-pull-rebase.png)

---

### git push

Syntax:
git push

Purpose:
Uploads local commits to the remote repository.

Example:
git push

Screenshot:
![git push](screenshots/git-push.png)

---

### git push -u origin branch-name

Syntax:
git push -u origin <branch-name>

Purpose:
Pushes a branch to the remote repository and sets it as the upstream branch.

Example:
git push -u origin remote-demo

Screenshot:
![git push upstream](screenshots/git-push-u.png)

---

### git push --force

Syntax:
git push --force

Purpose:
Forces Git to overwrite the remote branch with local changes.

Example:
git push --force

Screenshot:
![git push force](screenshots/git-push-force.png)

---



## 9. Stash Commands

---

### git stash

Syntax:
git stash

Purpose:
Temporarily saves changes in the working directory without committing them.

Example:
git stash

Screenshot:
![git stash](screenshots/git-stash.png)

---

### git stash list

Syntax:
git stash list

Purpose:
Displays the list of all stashed changes.

Example:
git stash list

Screenshot:
![git stash list](screenshots/git-stash-list.png)

---

### git stash pop

Syntax:
git stash pop

Purpose:
Applies the most recent stash and removes it from the stash list.

Example:
git stash pop

Screenshot:
![git stash pop](screenshots/git-stash-pop.png)

---

### git stash apply

Syntax:
git stash apply

Purpose:
Applies the stashed changes without removing them from the stash list.

Example:
git stash apply

Screenshot:
![git stash apply](screenshots/git-stash-apply.png)

---

### git stash drop

Syntax:
git stash drop stash@{0}

Purpose:
Deletes a specific stash entry.

Example:
git stash drop stash@{0}

Screenshot:
![git stash drop](screenshots/git-stash-drop.png)

---

### git stash clear

Syntax:
git stash clear

Purpose:
Removes all stashed entries.

Example:
git stash clear

Screenshot:
![git stash clear](screenshots/git-stash-clear.png)

---




## 10. Reset & Undo Commands

---

### git reset

Syntax:
git reset HEAD~1

Purpose:
Moves HEAD to a previous commit while keeping changes in the working directory.

Example:
git reset HEAD~1

Screenshot:
![git reset](screenshots/git-reset.png)

---

### git reset --soft

Syntax:
git reset --soft HEAD~1

Purpose:
Removes the last commit but keeps changes staged.

Example:
git reset --soft HEAD~1

Screenshot:
![git reset soft](screenshots/git-reset-soft.png)

---

### git reset --mixed

Syntax:
git reset --mixed HEAD~1

Purpose:
Removes the last commit and unstages the changes.

Example:
git reset --mixed HEAD~1

Screenshot:
![git reset mixed](screenshots/git-reset-mixed.png)

---

### git reset --hard

Syntax:
git reset --hard HEAD~1

Purpose:
Removes the last commit and deletes all associated changes permanently.

Example:
git reset --hard HEAD~1

Screenshot:
![git reset hard](screenshots/git-reset-hard.png)

---

### git revert

Syntax:
git revert <commit-id>

Purpose:
Creates a new commit that reverses the changes of a previous commit.

Example:
git revert a1b2c3d

Screenshot:
![git revert](screenshots/git-revert.png)

---

### git clean -f

Syntax:
git clean -f

Purpose:
Removes untracked files from the working directory.

Example:
git clean -f

Screenshot:
![git clean f](screenshots/git-clean-f.png)

---

### git clean -fd

Syntax:
git clean -fd

Purpose:
Removes untracked files and directories.

Example:
git clean -fd

Screenshot:
![git clean fd](screenshots/git-clean-fd.png)

---



## 11. Rebasing Commands

---

### git rebase

Syntax:
git rebase <branch-name>

Purpose:
Moves or reapplies commits from the current branch onto another branch.

Example:
git rebase main

Screenshot:
![git rebase](screenshots/git-rebase.png)

---

### git rebase -i

Syntax:
git rebase -i HEAD~2

Purpose:
Performs an interactive rebase allowing editing, reordering, or squashing commits.

Example:
git rebase -i HEAD~2

Screenshot:
![git rebase interactive](screenshots/git-rebase-i.png)

---

### git rebase --continue

Syntax:
git rebase --continue

Purpose:
Continues the rebase process after resolving conflicts.

Example:
git rebase --continue

Screenshot:
![git rebase continue](screenshots/git-rebase-continue.png)

---

### git rebase --abort

Syntax:
git rebase --abort

Purpose:
Cancels the rebase process and returns the branch to its previous state.

Example:
git rebase --abort

Screenshot:
![git rebase abort](screenshots/git-rebase-abort.png)

---



## 12. Cherry Pick & Patch Commands

---

### git cherry-pick

Syntax:
git cherry-pick <commit-id>

Purpose:
Applies a specific commit from another branch to the current branch.

Example:
git cherry-pick 37aeaf8

Screenshot:
![git cherry pick](screenshots/git-cherry-pick.png)

---

### git format-patch

Syntax:
git format-patch -1

Purpose:
Creates a patch file from commits.

Example:
git format-patch -1

Screenshot:
![git format patch](screenshots/git-format-patch.png)

---

### git apply

Syntax:
git apply <patch-file>

Purpose:
Applies changes from a patch file to the working directory.

Example:
git apply 0001-example.patch

Screenshot:
![git apply](screenshots/git-apply.png)

---

### git am

Syntax:
git am <patch-file>

Purpose:
Applies a patch and creates a commit automatically.

Example:
git am 0001-example.patch

Screenshot:
![git am](screenshots/git-am.png)

---



## 13. Tagging Commands

---

### git tag

Syntax:
git tag

Purpose:
Lists all tags in the repository.

Example:
git tag

Screenshot:
![git tag](screenshots/git-tag.png)

---

### git tag -a

Syntax:
git tag -a <tag-name> -m "message"

Purpose:
Creates an annotated tag for a specific commit.

Example:
git tag -a v1.0 -m "Version 1.0 release"

Screenshot:
![git tag a](screenshots/git-tag-a.png)

---

### git tag -d

Syntax:
git tag -d <tag-name>

Purpose:
Deletes a tag from the local repository.

Example:
git tag -d v1.0

Screenshot:
![git tag d](screenshots/git-tag-d.png)

---

### git push origin --tags

Syntax:
git push origin --tags

Purpose:
Pushes all tags to the remote repository.

Example:
git push origin --tags

Screenshot:
![git push tags](screenshots/git-push-tags.png)

---




## 14. Submodule Commands

---

### git submodule add

Syntax:
git submodule add <repository-url> <directory>

Purpose:
Adds another Git repository as a submodule inside the current repository.

Example:
git submodule add https://github.com/example/repo.git submodule-demo

Screenshot:
![git submodule add](screenshots/git-submodule-add.png)

---

### git submodule init

Syntax:
git submodule init

Purpose:
Initializes submodule configuration from the .gitmodules file.

Example:
git submodule init

Screenshot:
![git submodule init](screenshots/git-submodule-init.png)

---

### git submodule update

Syntax:
git submodule update

Purpose:
Fetches and updates the submodule repository to the recorded commit.

Example:
git submodule update

Screenshot:
![git submodule update](screenshots/git-submodule-update.png)

---



## 15. Debugging Commands

---

### git bisect start

Syntax:
git bisect start

Purpose:
Starts the bisect process to identify the faulty commit.

Example:
git bisect start

Screenshot:
![git bisect start](screenshots/git-bisect-start.png)

---

### git bisect good

Syntax:
git bisect good <commit-id>

Purpose:
Marks a commit as good during bisect search.

Example:
git bisect good 9d5881a

Screenshot:
![git bisect good](screenshots/git-bisect-good.png)

---

### git bisect bad

Syntax:
git bisect bad

Purpose:
Marks the current commit as bad during bisect search.

Example:
git bisect bad

Screenshot:
![git bisect bad](screenshots/git-bisect-bad.png)

---
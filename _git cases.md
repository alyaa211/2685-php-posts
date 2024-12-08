# CASE 1: Copy a person project
-- download the project from GIT Hub (4 ways under the green code button)

-- in the downloaded folder (local folder on your PC) initialize a new repo [git init]

-- add all files to staging [git add .]

-- make a commit [git commit -m "A message"]

-- link this repo to your GIT Hub repo
1- Create a GIT Hub repo
2- type [git remote add origin <your new created git hub repo url under the green code button>]
3- rename the master branch to main [git branch -M main]
4- push the project to your GIT Hub repo [git push --set-upstream origin main]


# CASE 2: Work in a project as a team member
-- fork the project to your account
-- link the forked repo to your local folder [git remote add origin <YOUR new forked git hub repo url under the green code button>]
-- download your forked repo to your PC [git pull origin main]
-- make updates
-- add all files to staging [git add .]
-- make a commit [git commit -m "A message"]
--push the project to your GIT Hub repo [git push --set-upstream origin main]
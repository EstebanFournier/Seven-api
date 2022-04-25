git config --global user.name "EstebanFournier"
git config --global user.email "fourni05es@lycee-ndduroc.com"

Create a new repository

git clone git@srv-gitlab.sio.dev:fourni05es/sp1_api.git
cd sp1_api
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master

Push an existing folder

cd existing_folder
git init
git remote add origin git@srv-gitlab.sio.dev:fourni05es/sp1_api.git
git add .
git commit -m "Initial commit"
git push -u origin master

Push an existing Git repository

cd existing_repo
git remote rename origin old-origin
git remote add origin git@srv-gitlab.sio.dev:fourni05es/sp1_api.git
git push -u origin --all
git push -u origin --tags


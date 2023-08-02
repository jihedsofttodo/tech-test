# FUNCTIONALITIES :
The functionaltiies are depends on user role:
# FOR NORMAL USER : who is the user that has the ROLE_USER : 
# Authenticate through his credentials ( email , password ) / Register
# Add, edit, delete a post 
# Reading all posts including his posts separately
# Request a posts by category

# FOR ADMIN USER: who is the user that has the ROLE_ADMIN
# Show the users of the app
# enable / disable a user
# show all posts and delete post
# the dashboard admin should only accessible for user admin
# Technologies:
# Symfony Framework, RESTful API, MySQL, Docker, JWT ( JSON WEB TOKEN for security )

# TODO
    # Create an RESTFul API :
        # authenticate user and return a token to enable access to resources of the app.
        # register user
        # fetching all blogposts and blogposts by user including a pagination feature.
        # filter blogposts by category
        # add new blogpost
        # edit a blogpost
        # delete a blogpost
    # Admin User:
        # deny the access for the dashboard if the user not an admin.
        # show a list of users including the feature of enable / disable a selected user.
        # show a list of the blogposts and it can delete blogposts
# Additional functionality: ( this is considered if the required are done )
    # dockerize your application
    # User Interface should organized and ergonomic
    # the candidate is encouraged to be creative and allowed to add new features.

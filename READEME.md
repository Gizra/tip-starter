First installation.

    sh -c "$(curl -fsSL https://raw.githubusercontent.com/Gizra/tip-starter/master/install)"
    
    
Robo commands

## Add Credentials to Backend 

Command will create a `.env.local` on the MDR repo, with the credentials to
connect to the backend.

    robo mdr:create-env "https://test-server.example.com" "SOME-ACCESS-TOKEN" "75df7c5b-3593-58ee-8a66-aa82a6d1a6ed"
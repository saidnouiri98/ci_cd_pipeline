pipeline {
    agent any

    stages {
        stage('Cleanup') {
            steps {
                script {
                    // Use the 'deleteDir()' step to clean up the workspace
                    deleteDir()
                }
            }
        }

        stage('Clone') {
            steps {
                script {
                    // Use 'git' step to clone the repository
                    git branch: 'main', url: 'https://github.com/saidnouiri98/ci_cd_pipeline.git'
                        // List files in the directory
                        ssh 'docker compose up -d'
                }
            }
        }
    }
}

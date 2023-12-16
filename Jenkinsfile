pipeline {
    agent any

    stages {
        stage('Build and Deploy') {
            steps {
                script {
                    // Navigate to the project directory
                    dir('ci_cd_pipeline') {
                // Build and run Docker Compose
                //sh 'docker-compose up -d'
                sh 'docker compose up -d'
            }
        }
                
    }
        }
    }
}

pipeline {
    agent any

    stages {
        stage('premiere etape') {
            steps {
                // Les étapes à exécuter dans la première étape
                echo 'Ceci est la première étape.'
            }
        }

        stage('deuxième étape') {
            steps {
                // Les étapes à exécuter dans la deuxième étape
                echo 'Ceci est la deuxième étape.'
            }
        }

        // Ajoutez d'autres étapes au besoin
    }

    // Post-build actions, notifications, etc.
    post {
        always {
            // Actions à effectuer après l'exécution de toutes les étapes
        }
    }
}

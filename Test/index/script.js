        // Function to filter programs based on subject and level
        const filterPrograms = () => {
            const subjectFilter = document.getElementById('subject-filter').value.toLowerCase();
            const levelFilter = document.getElementById('level-filter').value.toLowerCase();
            const programs = document.querySelectorAll('.program');
            
            programs.forEach(program => {
                const subject = program.getAttribute('data-subject').toLowerCase();
                const level = program.getAttribute('data-level').toLowerCase();
                
                if ((subjectFilter === '' || subject.includes(subjectFilter)) && 
                    (levelFilter === '' || level.includes(levelFilter))) {
                    program.style.display = 'block';
                } else {
                    program.style.display = 'none';
                }
            });
        };

        // Event listeners for filters
        document.getElementById('subject-filter').addEventListener('change', filterPrograms);
        document.getElementById('level-filter').addEventListener('change', filterPrograms);

        // Function to toggle FAQ answers
        const toggleFAQ = (faqItem) => {
            const answer = faqItem.querySelector('.faq-answer');
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        };
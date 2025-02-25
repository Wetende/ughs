# Caching Implementation Guide for Uasin Gishu High School Portal

## 1. Redis Setup

### 1.1 Installation
```bash
# Install Redis on Windows
# Download Windows Subsystem for Linux (WSL) if not installed
wsl --install

# Install Redis in WSL
sudo apt-get update
sudo apt-get install redis-server

# Start Redis service
sudo service redis-server start

# Test Redis
redis-cli ping
# Should return PONG
```

### 1.2 Laravel Redis Configuration
1. Install Predis package:
```bash
composer require predis/predis
```

2. Update `.env` file:
```env
CACHE_DRIVER=redis
REDIS_CLIENT=predis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

## 2. Key Areas for Caching

### 2.1 School Settings Cache
```php
// app/Services/School/SchoolService.php

class SchoolService
{
    public function getSchoolSettings()
    {
        return Cache::remember('school_settings', 3600, function () {
            return School::first();
        });
    }

    public function updateSchoolSettings($data)
    {
        $school = School::first();
        $school->update($data);
        Cache::forget('school_settings');
        return $school;
    }
}
```

### 2.2 User Roles and Permissions
```php
// app/Models/User.php

public function getRoles()
{
    return Cache::remember('user_roles_'.$this->id, 3600, function () {
        return $this->roles()->with('permissions')->get();
    });
}

public function clearRoleCache()
{
    Cache::forget('user_roles_'.$this->id);
}
```

### 2.3 Class Timetables
```php
// app/Services/Timetable/TimetableService.php

class TimetableService
{
    public function getClassTimetable($classId)
    {
        return Cache::remember('timetable_class_'.$classId, 3600, function () use ($classId) {
            return Timetable::where('class_id', $classId)
                          ->with(['subject', 'teacher'])
                          ->get();
        });
    }

    public function updateTimetable($classId, $data)
    {
        // Update timetable
        $result = Timetable::updateOrCreate(['class_id' => $classId], $data);
        
        // Clear cache
        Cache::forget('timetable_class_'.$classId);
        
        return $result;
    }
}
```

### 2.4 Student Grade Reports
```php
// app/Services/Grade/GradeService.php

class GradeService
{
    public function getStudentGrades($studentId, $termId)
    {
        $cacheKey = "student_grades_{$studentId}_{$termId}";
        return Cache::remember($cacheKey, 1800, function () use ($studentId, $termId) {
            return Grade::where('student_id', $studentId)
                       ->where('term_id', $termId)
                       ->with(['subject', 'teacher'])
                       ->get();
        });
    }
}
```

### 2.5 Fee Structures
```php
// app/Services/Fee/FeeService.php

class FeeService
{
    public function getFeeStructure($classLevel)
    {
        return Cache::remember('fee_structure_'.$classLevel, 86400, function () use ($classLevel) {
            return FeeStructure::where('class_level', $classLevel)
                             ->with('categories')
                             ->get();
        });
    }
}
```

## 3. View Caching

### 3.1 Blade View Caching
```php
// Example of view caching in blade templates
@cache('unique_key_name', 3600)
    {{-- Expensive content here --}}
    @include('expensive.component')
@endcache
```

### 3.2 Navigation Menu Caching
```php
// app/Helpers/MenuHelper.php

class MenuHelper
{
    public static function getNavigationMenu()
    {
        return Cache::remember('navigation_menu', 3600, function () {
            return Menu::with('subItems')
                      ->where('active', true)
                      ->orderBy('order')
                      ->get();
        });
    }
}
```

## 4. API Response Caching

### 4.1 Controller Level Caching
```php
// app/Http/Controllers/API/StudentController.php

class StudentController extends Controller
{
    public function index()
    {
        return Cache::remember('api_students_list', 300, function () {
            return StudentResource::collection(
                Student::with(['class', 'parent'])->paginate(20)
            );
        });
    }
}
```

## 5. Cache Management

### 5.1 Cache Clear Command
```php
// app/Console/Commands/ClearAppCache.php

class ClearAppCache extends Command
{
    protected $signature = 'cache:clear-all';
    
    public function handle()
    {
        Cache::flush();
        $this->info('All cache cleared successfully');
    }
}
```

### 5.2 Scheduled Cache Clear
```php
// app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    // Clear specific caches daily
    $schedule->command('cache:clear-all')->daily();
    
    // Rebuild common caches
    $schedule->call(function () {
        Cache::remember('school_settings', 86400, function () {
            return School::first();
        });
    })->daily();
}
```

## 6. Cache Tags for Better Organization

```php
// Example of using cache tags
Cache::tags(['school', 'settings'])->remember('school_info', 3600, function () {
    return School::with('contacts')->first();
});

Cache::tags(['students', 'class-8'])->remember('class_8_students', 1800, function () {
    return Student::where('class_level', 8)->get();
});

// Clear specific tagged cache
Cache::tags(['school'])->flush();
```

## 7. Best Practices

1. **Cache Duration**
   - Short-lived (5-15 minutes): Dynamic data like dashboards
   - Medium-lived (1-6 hours): Semi-static data like timetables
   - Long-lived (12-24 hours): Static data like fee structures

2. **Cache Keys**
   - Use descriptive names
   - Include relevant IDs
   - Use consistent naming conventions

3. **Cache Invalidation**
   - Clear related caches when data is updated
   - Use cache tags for grouped invalidation
   - Implement automatic cache clearing schedules

4. **Error Handling**
```php
public function getData()
{
    try {
        return Cache::remember('key', 3600, function () {
            return $this->expensiveOperation();
        });
    } catch (\Exception $e) {
        Log::error('Cache error: ' . $e->getMessage());
        return $this->expensiveOperation();
    }
}
```

## 8. Monitoring Cache Performance

1. **Install Redis Commander for monitoring:**
```bash
npm install -g redis-commander
redis-commander
```

2. **Add Cache Hit/Miss Monitoring:**
```php
// app/Providers/AppServiceProvider.php

public function boot()
{
    Cache::macro('rememberWithStats', function ($key, $ttl, $callback) {
        $hit = Cache::has($key);
        $value = Cache::remember($key, $ttl, $callback);
        
        Log::info('Cache ' . ($hit ? 'HIT' : 'MISS') . ': ' . $key);
        
        return $value;
    });
}
```

## 9. Implementation Steps

1. Install and configure Redis
2. Update environment variables
3. Implement caching in core services
4. Add cache clearing commands
5. Set up monitoring
6. Test cache performance
7. Deploy and monitor in production

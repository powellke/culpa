<?phpnamespace Culpa;use Illuminate\Database\Eloquent\Model;/** * A model that adds the trait but doesn't say which events to track */class NotBlameableModel extends Model{    use Blameable;    protected $table = 'posts';}NotBlameableModel::observe(new BlameableObserver);